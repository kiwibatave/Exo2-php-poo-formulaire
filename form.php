<?php

class Form {

  public function startform() {
    return('<form action="#" method="post">');
  }

  public function input() {
    return ('<input type="text" name="" value=""><br>');
  }

  public function select() {
    return ('<select value="">
    <option value="valeur">Valeur</option>
    <option value="valeur1">Valeur1</option>
    <option value="valeur2">Valeur2</option></select><br>');
  }

  public function submit() {
    return ('<button type="submit">SEND</button><br>');
  }

  public function textarea() {
    return ('<textarea value=""></textarea><br>');
  }

  public function radio() {
    return ('<input type="radio" value=""><br>');
  }

  public function checkbox() {
    return ('<input type="checkbox" value=""><br>');
  }

  public function endform() {
    return ('</form>');
  }
}
