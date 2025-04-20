import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import 'package:intl/intl.dart';
import '../models/cart_model.dart';
import '../models/item.dart';
import 'cart_screen.dart';

class HomeScreen extends StatelessWidget {
  HomeScreen({super.key});

  final List<Item> availableItems = [
    Item(id: 1, name: "Beras", price: 250000),
    Item(id: 2, name: "Gula", price: 20000),
    Item(id: 3, name: "Tepung", price: 6000),
    Item(id: 4, name: "Bumbu dapur", price: 10000),
    Item(id: 5, name: "Minyak", price: 20000),
    Item(id: 6, name: "Susu", price: 50000),
    Item(id: 7, name: "Telur", price: 30000),
    Item(id: 8, name: "Kopi", price: 25000),
    Item(id: 9, name: "Snack", price: 30000),
    Item(id: 10, name: "Garam", price: 5000),
    Item(id: 11, name: "Kecap", price: 12000),
    Item(id: 12, name: "Mie Instan", price: 3000),
    Item(id: 13, name: "Sabun Cuci", price: 10000),
    Item(id: 14, name: "Sikat Gigi", price: 8000),
    Item(id: 15, name: "Pasta Gigi", price: 15000),
    Item(id: 16, name: "Tisu", price: 10000),
    Item(id: 17, name: "Deterjen", price: 25000),
    Item(id: 18, name: "Sampo", price: 18000),
    Item(id: 19, name: "Sabun Mandi", price: 10000),
    Item(id: 20, name: "Air Mineral Galon", price: 18000),
    Item(id: 21, name: "Roti Tawar", price: 16000),
    Item(id: 22, name: "Mentega", price: 12000),
    Item(id: 23, name: "Saus Sambal", price: 9000),
    Item(id: 24, name: "Mayones", price: 14000),
    Item(id: 25, name: "Sarden Kaleng", price: 20000),
  ];

  final NumberFormat currencyFormatter = NumberFormat.currency(
    locale: 'id_ID',
    symbol: 'Rp ',
    decimalDigits: 0,
  ); // Format uang

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text("Kai Mart"),
        actions: [
          IconButton(
            icon: const Icon(Icons.shopping_cart),
            onPressed: () {
              Navigator.push(
                context,
                MaterialPageRoute(builder: (context) => const CartScreen()),
              );
            },
          ),
        ],
      ),
      body: ListView.builder(
        itemCount: availableItems.length,
        itemBuilder: (context, index) {
          final item = availableItems[index];
          return ListTile(
            title: Text(item.name),
            subtitle: Text("Rp ${item.price}"),
            trailing: ElevatedButton(
              onPressed: () {
                Provider.of<CartModel>(context, listen: false).add(item);
              },
              child: const Text("Tambah"),
            ),
          );
        },
      ),
    );
  }
}
