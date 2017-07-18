<?php

class Html {

  public function meta() {
    return('<meta charset="utf-8">');
  }

  public function css() {
    return('<link rel="stylesheet" href="style.css">');
  }

  public function img() {
    return('<img src="footer1.jpg"><br>');
  }

  public function link() {
    return('<a href="https://en.wikipedia.org/wiki/Blade_Runner">YOOOOOOOOO</a>');
  }
}
