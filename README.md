#### php artisan tinker

- > Illuminate\Support\Str::password() = "c%P_NN3GD1<W,v}3o8Cr[(&ZqFj{QH<e"

- > str()->password() = "aY8ym]uzzP\!9TF_r!)YP~YG3>TkTKly"

- > str()->password(5, numbers: false) = "rsU(o"


-------------------------------------------------
- composer global config bin-dir --absolute
- export PATH="$PATH:/home/hugo/.config/composer/vendor/bin"

-------------------------------------------------
- laravel new laravel10 --pest --breeze
- pennant : https://www.youtube.com/watch?v=0huthUNaZ08&list=PL3VM-unCzF8j7Do3dDNqH_vL20kGWubNA&index=5
- relationships : https://www.youtube.com/playlist?list=PL1JpS8jP1wgA7YIkG5pJDa0XwvonK-mQR
    1. A User has one House and the House belongs to the User
    2. A user has many Farms and the Farms belongs to a User
