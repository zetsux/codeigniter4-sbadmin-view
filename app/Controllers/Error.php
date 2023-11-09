<?php

namespace App\Controllers;

class Error extends BaseController
{
  public function notFound(): string
  {
      return view('404');
  }

  public function unauthorized(): string
  {
      return view('401');
  }

  public function serverError(): string
  {
      return view('500');
  }
}
