var animation = bodymovin.loadAnimation({
    container: document.getElementById('contact'),
        
    // Set your ID to something that you'll associate with the animation you're using //
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: '../assets/animations/contact/contact.json'
        
    // Make sure your path has the same filename as your animated     SVG's JSON file //
    })