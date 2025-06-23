<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

// use function Pest\Laravel\delete;

class TodoController extends Controller
{
    public function home() {
        $todos = Todo::all();
        //dd($todos);
        return view('home', ['todos' => $todos]);
    }
    public function create(Request $request) {
        # In the request parameter we will get what are the data or stuff. Does the user entered.
        //dd($request);
        //dd($request -> post('title'));

          # This is also a way to create and save any data to DB.
        // $todo = new Todo();
        // $todo ->title = $request -> post('title');
        // $todo -> save();

        # This is also an another way to create and save data into DB.
        # This is an updated way and simple way to do.
        $validatedData = $request->validate([
            'title' => 'required|max:124'
        ]);
        //dd($validatedData);
        # This is called mass assignment.
        # Creating bulk of data.
        Todo::create($validatedData);
        // $todo = new Todo();
        // $todo ->title = $request -> post('title');
        // $todo -> save();
      
        return redirect(route('home'));
        //return back();
    }

    # Now we pass the model name and id together. So now we can get that object in this controller.
    # This is updated way to find the data.
    public function edit(Todo $id) {
        //dd($id);
        # This is updated way to respond back if any error is there.
        //$todo = Todo::findOrFail($id);

        # We can respond back by this way if any error and this is normal way.
        //if (!$todo) return abort(404);
        //dd($todo);

        # Here we define key for value. Which we passing to views folder.
        //return view('update', ['todos' => $todo]);

        # This is also same thing. But here we not defining key. Because both key and value name will be same all the time.
        return view('update', compact('id'));
    }
    public function update(Request $request, Todo $id) {
        $validatedData = $request->validate([
            'title' => 'required|max:124'
        ]);
        //dd($validatedData);
        # This is one way to update the data of that particular data.
        //$id->title = $validatedData['title'];
        //$id->save();

        # This is another way to update data.
        $id->update($validatedData);
        return redirect(route('home'));
    }
    public function delete(Todo $id) {
        $id->delete();
        return back();
    }
}
