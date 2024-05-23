<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Here I will show how the search function in Laravel works or what the code is.
![image](https://github.com/NoushedAhmedJholok/Search_Functionality/assets/80415299/c9318487-c55a-45fa-920b-9f84a86ac926)


### First let's show the search form / code
```language
            <form class="d-flex" action="{{ route('index') }}" method="GET">
              <input name="query" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
```
### Route ( Web.php )
```language
Route::get('/', [PostController::class, 'index'])->name('index');
```
### Controller Function or Controller Code 
```language
    function index(Request $request){
        $query = $request->input('query');

        // Perform the search using the Post model
        $results = Post::where('title', 'like', '%' . $query . '%')
            ->orWhere('dis', 'like', '%' . $query . '%')
            ->get();
         $posts = Post::all();
        return view('welcome', compact('results', 'query','posts'));
        
    }
```
### view / blade ( show search data ) 
```language
<h1>Search Results for "{{$query}}"</h1>


                                @if($results->isEmpty())
                                    <tr>
                                        No results found.
                                    </tr>
                                @else 
                              @foreach ($results as $result)
                                  <tr>
                                    <td>{{$result->id}}</td>
                                    <td>{{$result->title}}</td>
                                    <td>{{$result->user}}</td>
                                    <td>{{$result->dis}}</td>
                                  </tr>
                              @endforeach
                              
                              @endif

```

## Hope this code will help you a lot. 
### If you benefit then let us be friends! [LinkedIn](https://www.linkedin.com/in/noushedahmedjholok/)  [facebook](https://www.facebook.com/NoushedAhmedJholok)
