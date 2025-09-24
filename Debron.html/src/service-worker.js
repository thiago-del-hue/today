self.addEventListener("install",event => {
    event.waitUntil(
        caches.open("app-Data e Hora-cache").then(cache => {
       return cache.addAll([
        "index.html",
        "manifest.json",
       self.addEventListener("install",event => {
    event.waitUntil(
        caches.open("app-Data e Hora-cache").then(cache => {
       return cache.addAll([
        "index.html",
        "manifest.json",
        "iconee-192.jpg",
        "icone-512.png",
        "manha.jpg",
        "tarde.jpg",
        "noite.jpg",
        "madrugada.jpg"
       ]);
    })
);
});
 self.addEventListener("fetch",event=> {
    event.respondWith(
        caches.match(event.request).then(response=> response|| feth(event.request))
    );
 });

        "icone-512.png",
        "manha.jpg",
        "tarde.jpg",
        "noite.jpg",
        "madrugada.jpg"
       ]);
    })
);
});
 self.addEventListener("fetch",event=> {
    event.respondWith(
        caches.match(event.request).then(response=> response|| feth(event.request))
    );
 });


