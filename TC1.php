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
    $this->select("name=package", "label=Antalya (Moscow)");
    $this->click("css=span.ui-dropdownchecklist-text");
    $this->click("id=ddcl-5-i0");
    $this->click("id=ddcl-5-i1");
    $this->click("id=ddcl-5-i2");
    $this->click("id=ddcl-5-i3");
    $this->click("//div[@id='content_wrapper']/div/form/div[2]/div[2]/div[3]/div");
    $this->select("//div[@id='content_wrapper']/div/form/div[2]/div[2]/div[2]/div[2]/select", "label=7");
    $this->select("//div[@id='content_wrapper']/div/form/div[2]/div[2]/div[2]/div[2]/select[2]", "label=10");
    $this->select("name=childNumber", "label=2");
    $this->type("name=childAge[]", "5");
    $this->click("css=input.main-button.pegasys_search_button");
  }
}
?>