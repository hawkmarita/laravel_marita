    @if($users->count())
          @foreach($users as $user)
              <article>
                  <h2>{{ $user->name }}</h2>
                  <p>{{ $user->email }}</p>
              </article>
          @endforeach
      @endif
