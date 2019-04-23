self.addEventListener('install', function(e) {
    e.waitUntil(
        caches.open('webcoding-v5').then(function(cache) {
            return cache.addAll([
                './',
                './wp-content/themes/webcoding/dist/css/style.css',
                './wp-content/themes/webcoding/dist/js/all.min.js'
            ]);
        })
    );
});


self.addEventListener('fetch', function(event) {
    //console.log(event.request.url);

    event.respondWith(
        caches.match(event.request).then(function(response) {
            return response || fetch(event.request);
        })
    );
});


