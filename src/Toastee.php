<?php

namespace Paolor\Toastee;

class Toastee
{
    public function success(string $title, string $message): string
    {
        return view('toastee::alert', [
            'type' => 'success',
            'title' => $title,
            'message' => $message
        ])->render();
    }

    public function error(string $title, string $message): string
    {
        return view('toastee::alert', [
            'type' => 'error',
            'title' => $title,
            'message' => $message
        ])->render();
    }

    public function warning(string $title, string $message): string
    {
        return view('toastee::alert', [
            'type' => 'warning',
            'title' => $title,
            'message' => $message
        ])->render();
    }

    public function info(string $title, string $message): string
    {
        return view('toastee::alert', [
            'type' => 'info',
            'title' => $title,
            'message' => $message
        ])->render();
    }
}