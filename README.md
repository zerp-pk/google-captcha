# zerp/google-captcha

Google reCAPTCHA (v2/v3) integration module for the [Zerp](https://github.com/zerp-pk) ERP platform. Protects forms against spam and bot submissions.

## Requirements

- PHP 8.2+
- A Laravel application with package auto-discovery enabled (built for Zerp, Laravel 12)

## Installation

```bash
composer require zerp/google-captcha
```

The package auto-registers via Laravel's package discovery - no manual service provider registration needed.

## What it provides

- `Zerp\GoogleCaptcha\Providers\GoogleCaptchaServiceProvider` - boots routes, migrations, and a `recaptcha` validation rule
- `recaptcha` validator rule, backed by `Zerp\GoogleCaptcha\Rules\RecaptchaRule`
- Settings route: `POST /google-captcha/settings/update` (route name `google-captcha.settings.update`), guarded by `web`, `auth`, `verified`, and `PlanModuleCheck:GoogleCaptcha` middleware
- Frontend settings component and field components under `src/Resources/js`

## License

MIT - see [LICENSE](LICENSE).
