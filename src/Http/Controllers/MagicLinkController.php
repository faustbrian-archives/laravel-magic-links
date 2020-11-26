<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Magic Links.
 *
 * (c) Konceiver Oy <info@konceiver.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Konceiver\MagicLinks\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse;

/**
 * @coversNothing
 */
final class MagicLinkController
{
    public function __invoke(Request $request)
    {
        abort_unless($request->hasValidSignature(), 401);

        Auth::loginUsingId($request->get('userId'));

        return resolve(LoginResponse::class);
    }
}
