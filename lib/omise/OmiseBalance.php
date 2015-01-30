<?php

require_once dirname(__FILE__).'/res/OmiseApiResourceSingleton.php';

class OmiseBalance extends OmiseApiResourceSingleton {
  const ENDPOINT = 'balance';

  /**
   * Retrieves a current balance in the account.
   * @param string $publickey
   * @param string $secretkey
   * @return Balance
   */
  public static function retrieve($publickey = null, $secretkey = null) {
    return parent::retrieve(get_class(), self::getUrl(), $publickey, $secretkey);
  }

  /**
   * (non-PHPdoc)
   * @see OmiseApiResource::reload()
   */
  public function reload() {
    parent::reload(self::getUrl());
  }

  /**
   * @param string $id
   * @return string
   */
  private static function getUrl($id = '') {
    return OMISE_API_URL.self::ENDPOINT.'/'.$id;
  }
}
