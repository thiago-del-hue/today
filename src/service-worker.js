self.addEventListener("install", event=> {
    event.waitUntil(
        caches.open("app-Diário-cache").then(cache=>{
            return cache.addAll([
                "index.html",
                "manifest.json",
                "iconee-192.png",
                "icone-512.png"
            ]);
        })
        );
    });
    self.addEventListener("fetch", event =>{
        event.respondWith(
            cathes.math(event.request).then(response=> response|| fetch(event.request))
        );
    });