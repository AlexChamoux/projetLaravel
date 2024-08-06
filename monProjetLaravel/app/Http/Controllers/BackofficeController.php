<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;

class BackofficeController extends Controller
{
    public function index()
    {
        $products = Product::all(); // récupère la table products en utilisant le modèle Product
        return view('backoffice.index', compact('products')); //retourne la vue backoffice.index et passe les produits récupérés à la vue
        // en utilisant la méthode compact = ['products' => $products]
    }

    public function create()
    {
        return view('backoffice.create'); //retourne la vue backoffice.create, qui contient le formulaire pour créer un nouveau produit.
    }

    public function store(Request $request)
    {   //Les données du formulaire sont validées en utilisant validator
        $validator = $this->checkC($request);

        if ($validator->fails()) {
            return redirect()->route('backoffice.create')
                ->withErrors($validator)
                ->withInput();
        }

        Product::create($validator->validated());

        return redirect()->route('backoffice.index')
            ->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        try {
            $product = Product::findOrFail($id); // en utilisant le model product, on cherche le produit à editer par son id
            return view('backoffice.edit', compact('product'));
        } catch (ModelNotFoundException $e) { //Si le produit n'est pas trouvé, une exception ModelNotFoundException est levée.
            return redirect()->route('backoffice.index')
                ->with('error', 'Product not found')
                ->setStatusCode(404);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = $this->checkC($request);

        if ($validator->fails()) {
            return redirect()->route('backoffice.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $product = Product::findOrFail($id);
            $product->update($validator->validated());

            return redirect()->route('backoffice.index')
                ->with('success', 'Product updated successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('backoffice.index')
                ->with('error', 'Product not found')
                ->setStatusCode(404);
        }
    }

    public function destroy($id)
    {
        try {
            Product::findOrFail($id)->delete();

            return redirect()->route('backoffice.index')
                ->with('success', 'Product deleted successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('backoffice.index')
                ->with('error', 'Product not found')
                ->setStatusCode(404);
        } catch (\Exception $e) {
            return redirect()->route('backoffice.index')
                ->with('error', 'An error occurred while deleting the product')
                ->setStatusCode(500);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Validation\Validator
     */
    public function checkC(Request $request): \Illuminate\Validation\Validator
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'weight' => 'required|numeric|min:0',
            'image' => 'required|url',
            'quantity' => 'required|integer|min:0',
            'status' => 'required|integer',
            'categories_id1' => 'required|integer',
            'pointure' => 'nullable|string|max:10'
        ]);
        return $validator;
    }
}
