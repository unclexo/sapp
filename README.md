## SAPP - Symfony APPlication

Sapp creates Symfony based web applications faster. It is structured for full-stack web development and aggregates symfony bundles.

## Installation

```bash
 $ composer create-project -sdev unclexo/sapp 
```

Once installed, you should install assets by following commands:

```bash
 $ php bin/console assets:install --symlink 
```

while developing frontend, run the following command:

```bash
 $ yarn run dev --watch 
```

when you are ready for production, run the following command:

```bash
 $ yarn run production
```

At this moment SAPP does not use [@symfony/webpack-encore](https://github.com/symfony/webpack-encore) for its backend.

## Symfony Bundles

The following Symfony bundles are considerably used in SAPP:

* [EasyAdminBundle](https://github.com/javiereguiluz/EasyAdminBundle)
* [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle)
* [IvoryCKEditorBundle](https://github.com/egeloen/IvoryCKEditorBundle)

and more...

## License

SAPP is released under MIT license.

## Contributing

If you found a mistake or a bug, please report it using the <a href="https://github.com/unclexo/sapp/issues">Issues</a> page. Your feedback is highly appreciated.