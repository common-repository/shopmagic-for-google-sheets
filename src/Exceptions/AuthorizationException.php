<?php

namespace WPDesk\ShopMagicGoogleSheets\Exceptions;

use WPDesk\ShopMagic\Exception\ShopMagicException;

/**
 * Thrown when user cannot be authorized.
 */
final class AuthorizationException extends \RuntimeException implements ShopMagicException {}
