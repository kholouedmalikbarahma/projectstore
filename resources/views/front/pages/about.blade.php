





@extends('layouts.front')

@section('titlle' , 'about')
@section('name','Hi, Im Monica')

@section('content')

               <section class="s-pagecontent pagecontent">

                    <div class="row pageintro">
                        <div class="column xl-6 lg-12">
                            <h2 class="text-display-title">Some inspiring words to describe yourself</h2>
                        </div>
                        <div class="column xl-6 lg-12 u-flexitem-x-right">
                            <p class="lead">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias eos quas blanditiis, quos sint nostrum fugit aperiam
                            inventore optio itaque molestias corporis, ipsa tenetur eligendi nihil iste porro, natus culpa consequuntur? Maxime,
                            corporis tempore. Sed tenetur veritatis velit recusandae eum, molestiae voluptate ducimus laudantium esse illo
                            doloribus atque eligendi deleniti iusto.
                            </p>
                        </div>
                    </div> <!-- end pageintro -->

                    <div class="row pagemedia">
                        <d class="column xl-12">
                            <figure class="page-media">
                                <img src="{{asset('images/thumbs/about/about-1200.jpg')}}"
                                     srcset="{{asset('images/thumbs/about/about-2400.jpg 2400w,
                                             images/thumbs/about/about-1200.jpg 1200w,
                                             images/thumbs/about/about-600.jpg 600w')}}" sizes="(max-width: 2400px) 100vw, 2400px" alt="">
                            </figure>
                        </d>
                    </div> <!-- end pagemedia -->

                    <div class="row width-narrower pagemain">
                        <div class="column xl-12">

                            <h2>How I Got Here</h2>
                            <p>
                            Eaque temporibus culpa perferendis expedita assumenda mollitia magnam. Lorem ipsum dolor sit amet consectetur adipisicing elit
                            facilis voluptates voluptatum animi numquam quas ea praesentium quaerat maxime sunt odit inventore itaque est et autem sequi nulla.
                            Distinctio obcaecati nesciunt asperiores dolorum tenetur voluptates, nemo alias doloremque. Quos cumque ipsum laudantium odio vero
                            aut odit nostrum aliquam? Nostrum in facilis, minus fuga quasi voluptas explicabo possimus incidunt, expedita tempora eius rem nobis sequi.
                            Doloribus esse sint suscipit quam nisi blanditiis voluptate explicabo.
                            </p>

                            <h2 class="u-add-bottom">My Values & Beliefs</h2>

                            <div class="grid-list-items list-items">
                                <div class="grid-list-items__item list-items__item u-remove-bottom">
                                    <div class="list-items__item-header">
                                        <h6 class="list-items__item-small-title">Consectetur</h6>
                                    </div>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia accusamus consectetur adipisicing elit excepturi corrupti
                                    nam quae exercitationem cupiditate, provident ipsa delectus vero possimus reprehenderit quas ut officiis tempora voluptatum
                                    quibusdam consectetur commodi.
                                    </p>
                                </div>
                                <div class="grid-list-items__item list-items__item u-remove-bottom">
                                    <div class="list-items__item-header">
                                        <h6 class="list-items__item-small-title">Adipisicing</h6>
                                    </div>
                                    <p>
                                    Molestias, autem impedit culpa dolores excepturi, quidem unde ducimus, rerum commodi deserunt earum, minus voluptatum.
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe doloremque provident quas quae exercitationem laboriosam.
                                    </p>
                                </div>
                                <div class="grid-list-items__item list-items__item u-remove-bottom">
                                    <div class="list-items__item-header">
                                        <h6 class="list-items__item-small-title">Doloremque</h6>
                                    </div>
                                    <p>
                                    Mollitia accusamus consectetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisicing elit excepturi corrupti
                                    nam quae exercitationem cupiditate, provident ipsa delectus vero possimus reprehenderit quas ut officiis tempora voluptatum
                                    quibusdam consectetur commodi!
                                    </p>
                                </div>
                                <div class="grid-list-items__item list-items__item u-remove-bottom">
                                    <div class="list-items__item-header">
                                        <h6 class="list-items__item-small-title">Assumenda</h6>
                                    </div>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe doloremque provident quas quae exercitationem laboriosam.
                                    Molestias, autem? Impedit culpa dolores excepturi, quidem unde ducimus, rerum commodi deserunt earum, minus voluptatum?
                                    </p>
                                </div>
                            </div> <!--grid-list-items -->

                            <h2>Why Work With Me</h2>
                            <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque temporibus culpa perferendis expedita assumenda mollitia magnam,
                            facilis voluptates voluptatum animi numquam quas ea praesentium quaerat maxime sunt odit inventore itaque est et autem sequi nulla.
                            Distinctio obcaecati nesciunt asperiores dolorum tenetur voluptates, nemo alias doloremque. Quos cumque ipsum laudantium odio vero aut
                            odit nostrum aliquam? Nostrum in facilis, minus fuga quasi voluptas explicabo possimus incidunt, expedita tempora eius rem nobis sequi.
                            Doloribus esse sint suscipit quam nisi blanditiis voluptate explicabo.
                            </p>

                            <p>
                            Quibusdam quis autem voluptatibus earum vel ex error ea magni. Rerum quam quos. Aut asperiores sit mollitia. Rem neque et voluptatem
                            eos quia sed eligendi et. Eaque velit eligendi ut magnam. Cumque ducimus laborum doloribus facere maxime vel earum quidem enim suscipit.
                            Numquam, corporis accusamus commodi saepe nostrum nesciunt nisi rem necessitatibus unde laboriosam molestias, quam ipsa voluptatum sed
                            ex cumque facilis assumenda maiores tempore reiciendis enim accusantium?
                            </p>

                            <h2>A Few More Words About Myself</h2>
                            <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Et assumenda debitis aut quidem ad voluptates quibusdam soluta temporibus,
                            eveniet nobis tempore sunt, provident sapiente accusamus dignissimos voluptatum fugiat nulla dicta nihil molestiae aspernatur error in.
                            Ut quo porro voluptatum delectus asperiores culpa non cum facere minima nesciunt assumenda, praesentium reprehenderit accusamus, quam
                            repellat nobis nemo? Ut magnam unde culpa pariatur possimus sunt fugiat ea maxime praesentium eaque quo odio sed eligendi harum dolor,
                            repellendus reprehenderit facere nihil quam. Saepe, magni.
                            </p>

                        </div> <!-- end grid-block-->
                    </div> <!-- end pagemain -->

               </section> <!-- pagecontent -->



               @endsection







