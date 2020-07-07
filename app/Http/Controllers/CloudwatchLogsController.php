<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CloudwatchLogsController extends Controller
{

    public function emergency() {
        $title = "Emergency";
        $message = "This is emergency";
        Log::emergency($message);
        return view('logs', compact('title'));
    }

    public function alert() {
        $title = "alert";
        $message = "This is alert";
        Log::alert($message);
        return view('logs', compact('title'));
    }

    public function critical() {
        $title = "critical";
        $message = "This is critical";
        Log::critical($message);
        return view('logs', compact('title'));
    }

    public function error() {
        $title = "error";
        $message = "This is error";
        Log::error($message);
        return view('logs', compact('title'));
    }

    public function warning() {
        $title = "warning";
        $message = "This is warning";
        Log::warning($message);
        return view('logs', compact('title'));
    }

    public function notice() {
        $title = "notice";
        $message = "This is notice";
        Log::notice($message);
        return view('logs', compact('title'));
    }

    public function info() {
        $title = "info";
        $message = "This is info";
        Log::info($message);
        return view('logs', compact('title'));
    }

    public function debug() {
        $title = "debug";
        $message = "This is debug";
        Log::debug($message);
        return view('logs', compact('title'));
    }
}
