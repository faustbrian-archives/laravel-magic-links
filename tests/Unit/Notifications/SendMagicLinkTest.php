<?php

declare(strict_types=1);

use Konceiver\MagicLinks\Notifications\SendMagicLink;

beforeEach(fn () => $this->subject = new SendMagicLink(5));

it('should render the notification contents', function (): void {
    expect((string) $this->subject->toMail()->render())->toContain('login/magic?expires=');
});

it('should only send it to email', function (): void {
    expect($this->subject->via())->toBe(['mail']);
});
