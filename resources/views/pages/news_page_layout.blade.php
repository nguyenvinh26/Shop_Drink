<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('public/fontend/assets/css/styleNews.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic|Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    {{-- <link rel="stylesheet" href="styles/newspaper.css"> --}}
    <title>Newspaper</title>
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" type="image/png" href="{{ asset('public/fontend/assets/iconlogo/logo1.png') }}" sizes="20x20">

</head>

<body>
    <div class="head">
        <div class="headerobjectswrapper">
            <div class="weatherforcastbox"><span style="font-style: italic;">Weatherforcast for the next 24 hours: Plenty of Sunshine</span><br><span>Wind: 7km/h SSE; Ther: 21°C; Hum: 82%</span></div>
            <header>{{ $newsPage['news_title'] }}</header>
        </div>

        <div class="subhead">York, MA - {{ $newsPage['created_at'] }} - Seven Pages</div>
    </div>
    <div class="content">
        <div class="collumns">

            @if($newsPage['count_sub_title'] == 1)
                @foreach($subNewsPage as $key => $subNewsPageData) 
                    <div class="collumn" style="width: 50%;">
                        <div class="head"><span class="headline hl5">{{ $subNewsPageData->sub_title }}</span>
                            <p><span class="headline hl6">{{ $subNewsPageData->sub_title }}</span></p>
                        </div>
                        
                        <figure class="figure">
                            <img class="media" src="{{ $newsPage['news_image'] }}" alt="">
                            <figcaption class="figcaption">Tùng Trương mãi đỉnh.</figcaption>
                        </figure>
        
                        <p>{{ $subNewsPageData->sub_content }}</p>
                    </div>
                @endforeach
            @elseif ($newsPage['count_sub_title'] == 2)
                <div class="collumn" style="width: 30%;">
                    <div class="head"><span class="headline hl5">{{ $subNewsPage[0]->sub_title }}</span>
                        <p><span class="headline hl6">{{ $subNewsPage[0]->sub_title }}</span></p>
                    </div>
                    
                    <figure class="figure">
                        <img class="media" src="{{ $newsPage['news_image'] }}" alt="">
                        <figcaption class="figcaption">Tùng Trương mãi đỉnh.</figcaption>
                    </figure>

                    <p>{{ $subNewsPage[0]->sub_content }}</p>
                </div>

                <div class="collumn" style="width: 30%;">
                    <div class="head"><span class="headline hl1">{{ $subNewsPage[1]->sub_title }}</span>
                        <p><span class="headline hl2">{{ $subNewsPage[1]->sub_title }}</span></p>
                    </div>{{ $subNewsPage[1]->sub_content }}</p>
                    <figure class="figure">
                        <img class="media" src="{{ $newsPage['news_image'] }}" alt="">
                        <figcaption class="figcaption">"Soai ka tùng trương.."</figcaption>
                    </figure>
                    <p><span class="citation">"TungChuong."</span> {{ $subNewsPage[1]->sub_content }}</p>
                </div>
            @elseif ($newsPage['count_sub_title'] == 3) 
                <div class="collumn" style="width: 30%;">
                    <div class="head"><span class="headline hl5">{{ $subNewsPage[0]->sub_title }}</span>
                        <p><span class="headline hl6">{{ $subNewsPage[0]->sub_title }}</span></p>
                    </div>
                    
                    <figure class="figure">
                        <img class="media" src="{{ $newsPage['news_image'] }}" alt="">
                        <figcaption class="figcaption">Tùng Trương mãi đỉnh.</figcaption>
                    </figure>

                    <p>{{ $subNewsPage[0]->sub_content }}</p>
                </div>

                <div class="collumn" style="width: 30%;">
                    <div class="head"><span class="headline hl1">{{ $subNewsPage[1]->sub_title }}</span>
                        <p><span class="headline hl2">{{ $subNewsPage[1]->sub_title }}</span></p>
                    </div>{{ $subNewsPage[1]->sub_content }}</p>
                    <figure class="figure">
                        <img class="media" src="{{ $newsPage['news_image'] }}" alt="">
                        <figcaption class="figcaption">"Soai ka tùng trương.."</figcaption>
                    </figure>
                    <p><span class="citation">"TungChuong."</span> {{ $subNewsPage[1]->sub_content }}</p>
                </div>

                <div class="collumn" style="width: 30%;">
                    <div class="head"><span class="headline hl3">{{ $subNewsPage[2]->sub_title }}</span>
                        <p><span class="headline hl4">{{ $subNewsPage[2]->sub_title }}</span></p>
                    </div>
                    {{ $subNewsPage[2]->sub_content }}
                </div>
            @elseif ($newsPage['count_sub_title'] == 4) 
                <div class="collumn" style="width: 20%;">
                    <div class="head"><span class="headline hl5">{{ $subNewsPage[0]->sub_title }}</span>
                        <p><span class="headline hl6">{{ $subNewsPage[0]->sub_title }}</span></p>
                    </div>
                    
                    <figure class="figure">
                        <img class="media" src="{{ $newsPage['news_image'] }}" alt="">
                        <figcaption class="figcaption">Tùng Trương mãi đỉnh.</figcaption>
                    </figure>

                    <p>{{ $subNewsPage[0]->sub_content }}</p>
                </div>

                <div class="collumn" style="width: 20%;">
                    <div class="head"><span class="headline hl1">{{ $subNewsPage[1]->sub_title }}</span>
                        <p><span class="headline hl2">{{ $subNewsPage[1]->sub_title }}</span></p>
                    </div>{{ $subNewsPage[1]->sub_content }}</p>
                    <figure class="figure">
                        <img class="media" src="{{ $newsPage['news_image'] }}" alt="">
                        <figcaption class="figcaption">"Soai ka tùng trương.."</figcaption>
                    </figure>
                    <p><span class="citation">"TungChuong."</span> {{ $subNewsPage[1]->sub_content }}</p>
                </div>

                <div class="collumn" style="width: 20%;">
                    <div class="head"><span class="headline hl3">{{ $subNewsPage[2]->sub_title }}</span>
                        <p><span class="headline hl4">{{ $subNewsPage[2]->sub_title }}</span></p>
                    </div>
                    {{ $subNewsPage[2]->sub_content }}
                </div>

                <div class="collumn" style="width: 20%;">
                    <div class="head"><span class="headline hl3">{{ $subNewsPage[3]->sub_title }} </span>
                        <p><span class="headline hl4">{{ $subNewsPage[3]->sub_title }}</span></p>
                    </div>
                    <p>{{ $subNewsPage[3]->sub_content }}</p>
                </div>
            @elseif ($newsPage['count_sub_title'] == 5) 
                <div class="collumn">
                    <div class="head"><span class="headline hl5">{{ $subNewsPage[0]->sub_title }}</span>
                        <p><span class="headline hl6">{{ $subNewsPage[0]->sub_title }}</span></p>
                    </div>
                    
                    <figure class="figure">
                        <img class="media" src="{{ $newsPage['news_image'] }}" alt="">
                        <figcaption class="figcaption">Tùng Trương mãi đỉnh.</figcaption>
                    </figure>

                    <p>{{ $subNewsPage[0]->sub_content }}</p>
                </div>

                <div class="collumn">
                    <div class="head"><span class="headline hl1">{{ $subNewsPage[1]->sub_title }}</span>
                        <p><span class="headline hl2">{{ $subNewsPage[1]->sub_title }}</span></p>
                    </div>{{ $subNewsPage[1]->sub_content }}</p>
                    <figure class="figure">
                        <img class="media" src="{{ $newsPage['news_image'] }}" alt="">
                        <figcaption class="figcaption">"Soai ka tùng trương.."</figcaption>
                    </figure>
                    <p><span class="citation">"TungChuong."</span> {{ $subNewsPage[1]->sub_content }}</p>
                </div>

                <div class="collumn">
                    <div class="head"><span class="headline hl3">{{ $subNewsPage[2]->sub_title }}</span>
                        <p><span class="headline hl4">{{ $subNewsPage[2]->sub_title }}</span></p>
                    </div>
                    {{ $subNewsPage[2]->sub_content }}
                </div>

                <div class="collumn">
                    <div class="head"><span class="headline hl3">{{ $subNewsPage[3]->sub_title }} </span>
                        <p><span class="headline hl4">{{ $subNewsPage[3]->sub_title }}</span></p>
                    </div>
                    <p>{{ $subNewsPage[3]->sub_content }}</p>
                </div>

                <div class="collumn">
                    <div class="head"><span class="headline hl1">{{ $subNewsPage[4]->sub_title }} </span>
                        <p><span class="headline hl4">{{ $subNewsPage[4]->sub_title }}</span></p>
                    </div>
                    <p>{{ $subNewsPage[1]->sub_content }}</p>
                </div>

                
            @endif

            
            
        
            {{-- <div class="collumn">
                <div class="head"><span class="headline hl5">Give people courage</span>
                    <p><span class="headline hl6">The crowd seemed to grow</span></p>
                </div>
                The sunset faded to twilight before anything further happened. The crowd far away on the left, towards Woking, seemed to grow, and I heard now a faint murmur from it. The little knot of people towards Chobham dispersed. There was scarcely an intimation of movement from the pit.</p>
                <figure class="figure">
                    <img class="media" src="{{ $newsPage['news_image'] }}" alt="">
                    <figcaption class="figcaption">Hermine hoping for courage.</figcaption>
                </figure>

                <p>It was this, as much as anything, that gave people courage, and I suppose the new arrivals from Woking also helped to restore confidence. At any rate, as the dusk came on a slow, intermittent movement upon the sand pits began, a movement that seemed to gather force as the stillness of the evening about the cylinder remained unbroken. Vertical black figures in twos and threes would advance, stop, watch, and advance again, spreading out as they did so in a thin irregular crescent that promised to enclose the pit in its attenuated horns. I, too, on my side began to move towards the pit.</p>

                <p>Then I saw some cabmen and others had walked boldly into the sand pits, and heard the clatter of hoofs and the gride of wheels. I saw a lad trundling off the barrow of apples. And then, within thirty yards of the pit, advancing from the direction of Horsell, I noted a little black knot of men, the foremost of whom was waving a white flag.</p>

            </div>--}}

            {{-- <div class="collumn">
                <div class="head"><span class="headline hl1">May the Force be with you</span>
                    <p><span class="headline hl2">Let go your conscious self and act on instinct</span></p>
                </div>Partially, but it also obeys your commands. Hey, Luke! May the Force be with you. I have traced the Rebel spies to her. Now she is my only link to finding their secret base.</p>
                <figure class="figure">
                    <img class="media" src="{{ $newsPage['news_image'] }}" alt="">
                    <figcaption class="figcaption">"This time, let go your conscious self and act on instinct."</figcaption>
                </figure>
                <p>Leave that to me. Send a distress signal, and inform the Senate that all on board were killed. <span class="citation">"Don't under&shy;estimate the Force. I suggest you try it again, Luke."</span> This time, let go your conscious self and act on instinct. In my experience, there is no such thing as luck. You're all clear, kid. Let's blow this thing and go home!</p>
                <p>You don't believe in the Force, do you? Partially, but it also obeys your commands. The plans you refer to will soon be back in our hands. As you wish.</p>
            </div>

            <div class="collumn">
                <div class="head"><span class="headline hl3">When darkness overspreads my eyes</span>
                    <p><span class="headline hl4">by JOHANN WOLFGANG VON GOETHE</span></p>
                </div>
                When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream;<p>and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath of that universal love which bears and sustains us, as it floats around us in an eternity of bliss; and then, my friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing, Oh, would I could describe these conceptions, could impress upon paper all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God!</p>
            </div>

            <div class="collumn">
                <div class="head"><span class="headline hl3">The buzz of the little world </span>
                    <p><span class="headline hl4">A thousand unknown plants</span></p>
                </div>
                <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath</p>
            </div>

            <div class="collumn">
                <div class="head"><span class="headline hl1">It wasn't a dream </span>
                    <p><span class="headline hl4">by FRANZ KAFKA</span></p>
                </div>
                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. </p>

                <p>His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. </p>
            </div>  --}}
        </div>
    </div>
</body>

</html>