<p align="center"><a href="https://alpana.org" target="_blank"><img src="https://res.cloudinary.com/debjit/image/upload/v1598972041/149_50_logo_uas3uf.png" width="150"></a></p>

## This is a Blood Donation Diary MVP software. Please let me know if you found any problem or needed any feature.

## I am building a more feature rich and stable version of this Web App as a Android app. Please stay updated.

## THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND.
I will add more feature in time.You can discuss in github section. Thank you.

## About Alpana Blood Donation Diary 

Alpana Blood Donation Diary is a simple app to manage your Groups / NGO's blood donations entry. I have created this app to help the local group manage with there blood donation.

- [x] [Simple, easy to use.](https://alpana.org/bdd).
- [x] [Multi Langual](https://alpana.org/bdd) (Bangla, English, or any other languages)
- [x] Search donor based on requisition for fast communication.
- [x] Anyone can post a requisition, No registration is required (Manual confirmation needed).
- [ ] An admin gets an email with the information (If enable).

## Admin can -

- [x] Admin can accept or delete the requisition.
- [x] Admin can accept the blood donation entry.
- [x] Admin can see all the donations.
- [x] Admin can manage any registered member.
- [x] Admin can download certificate for every donation made.
- [x] Admin can see who is available to donate.

## Member can -

- [x] Self-care, User can manually add their blood donation from the profile page.
- [x] Members can Opt-out from donating blood, with the date limitation.
- [x] Request member for blood donation and Send email asking donation.
- [x] User can download there own certificate from site.
- [x] User can request help on an open acpeted requisition.

## Otehr Site features

- [ ] [Real-time event broadcasting](https://alpana.org/bdd) is coming soon.
- [ ] Push notification
- [ ] Send SMS notification.

I am actively adding and updating this website, more feature coming soon.

Alpana Blood Donation Diary is ready to deploy app. You can take advantage of free hosting service to host a free website.

## Installation (Production)

Go to the directory and install required file for production

```bash
composer install --no-dev --prefer-dist --optimize-autoloader --no-interaction
```

Copy the env file 

```bash
copy .env.example .env
```
Generate key 

```bash
php artisan key:generate
```
Set the dattabase value in App/config/database.php or .env or your deployment enviornment.

Migrate the database

```bash
php artisan migrate --seed
```
Your app is ready to use. Use default username and password for admin is-

```bash
email: admin@admin.com
password : password
```
Now Link your storage for uploads
```bash
php artisan storage:link
```

## Hosting

Alpana Blood Donation Diary is created on laravel php framework. Please ask your hosting provider for laravel support.
- [x] Free Backend Hosting Provider [Heroku](https://heroku.com) and [Vercel](https://vercel.com) Setup tutorail(Will be update);

- [ ] Cpanel Web Hosting Supported. Tutorial will be update shortly.

## Security Vulnerabilities and Bugs

If you discover a security vulnerability within Alpana Blood Donation Diary, please send an e-mail to Debjit Biswas via [hi@debjit.in](mailto:hi@debjit.in). All security vulnerabilities will be promptly addressed.

## License

<a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons Attribution-NonCommercial 4.0 International License</a>.
