@props(['comment'])
<article class="flex bg-gray-200 p-8 rounded-xl space-x4">
                    <div class="flex-shrink-0">
                        <img src="https://i.pravatar.cc/100?u={{ $comment->user_id }}" width="100" height="100" class="rounded-xl" alt="">
                    </div>

                    <div>
                        <header>
                            <h3 class="font-blod">{{$comment->auther->username}}</h3>
                            <p class="text-sm">
                                Posted
                                <time>{{$comment->created_at->format('F j,Y,g:i a')}} </time>
                            </p>

                            <p>
                                {{$comment->body}}
                            </p>
                        </header>
                    </div>

                </article>
