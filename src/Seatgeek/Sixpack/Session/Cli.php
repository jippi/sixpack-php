<?php
namespace Seatgeek\Sixpack\Session;

class Cli extends \Seatgeek\Sixpack\Session {

	protected $_cookies = [];

  protected function retrieveClientId() {
    $cookieName = $this->cookiePrefix . '_client_id';

    if (isset($this->_cookies[$cookieName])) {
      return $this->_cookies[$cookieName];
    }

    return null;
  }

	protected function storeClientId($clientId) {
		$cookieName = $this->cookiePrefix . '_client_id';
		$this->_cookies[$cookieName] = $clientId;
	}

}
