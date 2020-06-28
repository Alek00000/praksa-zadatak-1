@extends('layout')
@section('show')

    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">IME</th>
                <th scope="col">PREZIME</th>
                <th scope="col">EMAIL</th>
              </tr>
            </thead>
            <tbody>


                    @foreach ($subscriber as $subscriber)
                    {
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $subscriber->id }}</td>
                        <td>{{ $subscriber->first_name }}</td>
                        <td>{{ $subscriber->last_name }}</td>
                        <td>{{ $subscriber->email }}</td>
                    </tr>
                    @endforeach
                }
            }

            </tbody>
          </table>
</div>
@endsection
