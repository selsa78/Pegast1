<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("https://pegast.ru/");
  }

  public function testMyTestCase()
  {
    $this->open("/");
    $this->click("id=primaryMenuBooking");
    $this->click("link=Туры");
    $this->waitForPageToLoad("30000");
    $this->click("link=Онлайн бронирование");
    $this->select("name=package", "label=Dalaman (Moscow)");
    $this->click("css=option[value=\"70001358\"]");
    $this->click("css=span.ui-dropdownchecklist-text");
    $this->click("//div[@id='ddcl-5-ddw']/div/div[4]");
    $this->click("id=dp1507395133886");
    $this->click("link=7");
    $this->click("id=dp1507395133887");
    $this->click("link=10");
    $this->select("//div[@id='content_wrapper']/div/form/div[2]/div[2]/div[2]/div[2]/select[2]", "label=5");
    $this->click("css=input.main-button.pegasys_search_button");
  }
}
?>