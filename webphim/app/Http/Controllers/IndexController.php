<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
 public function index()
 {
  return view('pages.home');
 }
 public function category()
 {
  return view('pages.category');
 }
 public function country()
 {
  return view('pages.country');
 }
 public function genre()
 {
  return view('pages.genre');
 }
 public function watch()
 {
  return view('pages.watch');
 }
 public function episode()
 {
  return view('pages.episode');
 }
    public function movie()
    {
    return view('pages.movie');
    }
}