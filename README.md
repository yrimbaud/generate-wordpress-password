# WordPress Password Generator

This is a small PHP script to generate a hashed password for WordPress. It can be used when you need to set a password directly in the database or in any other scenario where you need a WordPress-compatible hashed password.

## Main Features
- Lightweight: the script is only a few lines long and requires minimal resources to run.
- Easy to use: just replace "Your strong password!" with the password you want to hash, and run the script.

## How to Use
1. Clone this repository or download the `generatePassword.php` file.
2. Make sure you have the `wp-includes/pluggable.php` file from a WordPress installation in the same directory.
3. Replace "Your strong password!" in the `$password` variable with the password you want to hash.
4. Run the script in a PHP-enabled environment, and it will print out the hashed password.

## Security Considerations
This script should be used in a secure environment, as it deals with sensitive data - passwords. Do not expose the generated hashes or the original password to untrusted parties.

## Known Issues
There are currently no known issues. If you discover any bugs, please open an issue.

## Troubleshooting
If the script doesn't work, ensure that:
- You have a valid `wp-includes/pluggable.php` file in the same directory as the script.
- You're running the script in a PHP-enabled environment.

## Author
This project was created by Yann Rimbaud ([@yrimbaud](https://github.com/yrimbaud)).

## License
This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).
