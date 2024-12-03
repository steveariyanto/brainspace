<?php

namespace App\Services;

use Google\Client;
use Google\Service\Drive;

class GoogleDriveService {
    protected $client;

    public function __construct(){
        $this->client = new Client();
        $this->client->setClientId(config('services.google.client.id'));
        $this->client->setClientSecret(config('services.google.client.secret'));
        $this->client->setRedirectUri(config('services.google.redirect_uri'));
        $this->client->setScopes(Drive::DRIVE);
        $this->client->setAccessToken('offline');
        $this->client->setPrompt('consent');
    }

    public function getAuthUrl() {
        return $this->client->createAuthUrl();
    }

    public function checkAndRefreshToken($user)
    {
        $refreshToken = $user->google_refresh_token; // Assume this is stored in the user model

        if (!$refreshToken) {
            throw new \Exception('Refresh token not found.');
        }

        $this->client->setAccessToken([
            'access_token' => $user->google_access_token,
            'expires_in' => $user->google_expires_in,
            'created' => $user->google_token_created,
            'refresh_token' => $refreshToken,
        ]);

        // Check if the access token is expired
        if ($this->client->isAccessTokenExpired()) {
            $newToken = $this->client->fetchAccessTokenWithRefreshToken($refreshToken);

            // Save the updated token data
            $user->update([
                'google_access_token' => $newToken['access_token'],
                'google_drive' => $newToken['expires_in'],
                'google_token_created' => now()->timestamp,
            ]);

            return $newToken['access_token'];
        }

        return $user->google_access_token;
    }

    public function getDriveService($accessToken)
    {
        $this->client->setAccessToken($accessToken);
        return new Drive($this->client);
    }
}
