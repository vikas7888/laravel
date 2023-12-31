self.addEventListener('push', function (e) {
    if (!(self.Notification && self.Notification.permission === 'granted')) {
        //notifications aren't supported or permission not granted!
        return;
    }

    if (e.data) {
        var msg = e.data.json();
        //console.log(msg);
        e.waitUntil(self.registration.showNotification(msg.title, {
            body: msg.body,
            icon: msg.icon,
            actions: msg.actions
        }));
    }
});

self.addEventListener('notificationclick', function(event,e) {
    console.log('[Service Worker] Notification click Received');
    console.log(event.notification);
    event.notification.close();
    //
    event.waitUntil(
      clients.openWindow('https://a2itsoft.com')
    );
});
