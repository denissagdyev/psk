<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AboutController extends Controller
{
    public function index()
    {
        $aboutPage = Page::where('slug', 'about')->first(); // Ищем страницу
        if (!$aboutPage) {
            abort(404); // Или перенаправление на другую страницу
            // throw new NotFoundHttpException('Страница "О компании" не найдена.'); // Или выбрасываем исключение
        }
        return view('about', compact('aboutPage'));
    }
}