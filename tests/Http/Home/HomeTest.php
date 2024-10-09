<?php

declare(strict_types=1);

it('can see the "home" view', function () {
    $response = $this->get(route('home.index'));

    $response->assertOk()
        ->assertSee('Hello world!');
});
