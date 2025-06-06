<x-layout>
     <x-slot:heading>
         Product List
     </x-slot:heading>
     <x-table>
          <thead>
                 <tr>
                     <th scope="col">#</th>
                     <th scope="col">Product</th>
                     <th scope="col">Category</th>
                 </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user['id'] }}</th>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['gender'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
