{----------THINGS TO DO CONFIG PUSHER-------------}
INSTALLATION
1-composer require pusher/pusher-php-server
2-npm install pusher-js
3-npm insatll laravel-echo

CONFIGARATION
1-config/app.php uncomment BroadcastProvider
2-in .env file declare
*PUSHER_APP_ID
*PUSHER_APP_KEY
*PUSHER_APP_SECRET
*PUSHER_APP_CLUSTER
*BROADCAST_DRIVER=pusher
*QUEUE_CONNECTION=
3-put this tag in main file(may be already there)
<meta name="csrf_token" content="{{ csrf_token() }}">
4-resources/js/bootstrap.js uncomment laravel echo session
also decalre key and cluster
5-finaly run "npm run dev"
