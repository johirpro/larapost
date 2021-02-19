@extends('layout')

@section('content')
    <!-- Main -->
    <div id="main">
        <div class="container">
            <div class="row">

                <!-- Content -->
                <div id="content" class="8u skel-cell-important">
                    <section>
                        <h1>Create new Article</h1>

                        <form action="/article/{{$article->id}}" method="POST" style="width: 100%;">
                            @csrf
                            @method('PUT')
                            <div class="field">
                                <label class="label" for="title">Title</label>
                            </div>
                            <div class="control">
                                <input type="text" style="{{$errors->has('title') ? 'color: #f00;"' : '"'}} class="input" name="title" id="title" value="{{$article->title}}">
                                    @error('title')
                                        <p style="color: #f00">{{$errors->first('title')}}</p>
                                    @enderror
                            </div>

                            <div class="field">
                                <label class="label" for="intro">Intro</label>
                            </div>
                            <div class="control">
                                <input type="text" class="input" name="intro" id="intro" value="{{$article->intro}}">
                                @error('intro')
                                    <p style="color: #f00">{{$errors->first('intro')}}</p>
                                @enderror
                            </div>

                            <div class="field">
                                <label class="label" for="body">Body</label>
                            </div>
                            <div class="control">
                                <textarea rows="3" class="input" name="body" id="body">{{$article->body}}</textarea>
                                @error('body')
                                    <p style="color: #f00">{{$errors->first('body')}}</p>
                                @enderror
                            </div>

                            <div class="group">
                                <span>
                                    <button class="button" type="submit">Submit</button>
{{--                                    <button class="button">Cancel</button>--}}
                                </span>
                            </div>

                        </form>
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