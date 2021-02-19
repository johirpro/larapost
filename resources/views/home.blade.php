@extends('layout')

@section('content')
    <!-- Main -->
    <div id="main">
        <div class="container">
            <div class="row">

                <!-- Content -->
                <div id="content" class="8u skel-cell-important">
                    <section>
                        @foreach ($articles as $article)
                        <header>
                            <h2>{{$article->title}}</h2>
                            <span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
                        </header>
                        <a href="#" class="image full"><img src="images/pic07.jpg" alt="" /></a>
                        <p>{{$article->body}}</p>
                        @endforeach
                    </section>
                </div>

                <!-- Sidebar -->
                <div id="sidebar" class="4u">
                    <section>
                        <header>
                            <h2>Pellentesque vulputate</h2>
                        </header>
                        <ul class="style">
                            <li>
                                <p class="posted">August 11, 2002  |  (10 )  Comments</p>
                                <img src="images/pic04.jpg" alt="" />
                                <p class="text">Nullam non wisi a sem eleifend. Donec mattis libero eget urna. Pellentesque viverra enim.</p>
                            </li>
                            <li>
                                <p class="posted">August 11, 2002  |  (10 )  Comments</p>
                                <img src="images/pic05.jpg" alt="" />
                                <p class="text">Nullam non wisi a sem eleifend. Donec mattis libero eget urna. Pellentesque viverra enim.</p>
                            </li>
                            <li>
                                <p class="posted">August 11, 2002  |  (10 )  Comments</p>
                                <img src="images/pic06.jpg" alt="" />
                                <p class="text">Nullam non wisi a sem eleifend. Donec mattis libero eget urna. Pellentesque viverra enim.</p>
                            </li>
                            <li>
                                <p class="posted">August 11, 2002  |  (10 )  Comments</p>
                                <img src="images/pic05.jpg" alt="" />
                                <p class="text">Nullam non wisi a sem eleifend. Donec mattis libero eget urna. Pellentesque viverra enim.</p>
                            </li>
                        </ul>
                    </section>
                </div>

            </div>
        </div>
    </div>
@endsection