<x-layout>
    <x-slot name="title">
        <title>All Blog</title>
    </x-slot>
    @foreach($blogs as $blog)
 <h1><a href="blogs/{{$blog->slug}}">{{$blog->title}}</a></h1>
 <h4>Author - <a href="users/{{$blog->author->username}}">{{$blog->author->name}}</a></h4>
 <p>
    <a href="/categories/{{$blog->category->slug}}">{{$blog->category->name}}</a>
 </p>
        <div>
            <p>published at - {{$blog->created_at->diffForHumans()}}</p>
            <p>{{$blog->intro}}</p>
        </div>
@endforeach
</x-layout>
 
