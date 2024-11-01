<?php

namespace WPDesk\ShopMagicGoogleSheets\Exceptions;

use WPDesk\ShopMagic\Exception\ShopMagicException;

/**
 * Thrown when user cannot be authenticated.
 */
final class AuthentincationException extends \RuntimeException implements ShopMagicException {}
