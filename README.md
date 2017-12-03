Page
----

The active page


Put it on the config/app.php

```
'providers' => [
    ...,
    Backtheweb\Page\PageServiceProvider::class
];
```

And add a facade alias to the same file at the bottom:

```
'aliases' => [
    ...,
    'Page' => Backtheweb\Page\Facades\Page::class
];