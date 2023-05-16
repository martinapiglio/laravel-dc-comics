<footer>

    <section id="footer-top">
        
        <div class="container">
            
           <div id="footer-center-links">
    
                @foreach ($data['footerLinks'] as $footerLink)
    
                    <div id="footer-center-link">
                
                        <h2> {{ $footerLink['title'] }} </h2>
                        <ul>
                            @foreach ($footerLink['links'] as $singleLink)
                                <li>
                                    <a href="">{{ $singleLink }}</a>
                                </li>
                            @endforeach
                        </ul>
                
                    </div>
            
                @endforeach
    
            <div id="footer-center-logo">
                <img src=" {{ Vite::asset('resources/img/dc-logo-bg.png') }} " alt="">
            </div>
    
        </div>

    </section>

    <section id="footer-bottom">

        <div class="container">
                
            <div id="footer-bottom-left">
                <button>SIGN-UP NOW!</button>
            </div>
    
            <div id="footer-bottom-right">
                <span class="text">FOLLOW US</span>
                    @foreach ($data['icons'] as $icon)
                        <div class="icons">
                            <img src=" {{ Vite::asset($icon) }} " alt="">                
                        </div>
                    @endforeach
            </div>
    
        </div>

    </section>

</footer>