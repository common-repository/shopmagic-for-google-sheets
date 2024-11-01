<?php
declare(strict_types=1);

namespace WPDesk\ShopMagicGoogleSheets;

class ApiMessageDecryptor
{

	public function decode(string $message): string
	{
		return base64_decode($message);
	}

	/** @throws \RuntimeException */
	public function decrypt(string $encryptedMessage, string $key): string
	{
		$ivPart = substr($encryptedMessage, 0, 16);
		$rawMessage = substr($encryptedMessage, 16);

		$decryptedMessage = openssl_decrypt(
			$rawMessage,
			'AES128',
			$key,
			0,
			$ivPart
		);

		if ($decryptedMessage === false) {
			throw new \RuntimeException('Failed to decrypt message.');
		}

		return $decryptedMessage;
	}
}
