<?php

it('can render', function () {
    $contents = $this->view('test', [
        //
    ]);

    $contents->assertSee('');
});
