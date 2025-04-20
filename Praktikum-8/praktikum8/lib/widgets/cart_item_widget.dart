import 'package:flutter/material.dart';
import 'package:intl/intl.dart';
import '../models/item.dart';

class CartItemWidget extends StatelessWidget {
  final Item item;

  const CartItemWidget({super.key, required this.item});

  @override
  Widget build(BuildContext context) {
    final currencyFormatter = NumberFormat.currency(
      locale: 'id_ID',
      symbol: 'Rp ',
      decimalDigits: 0,
    );

    return ListTile(
      title: Text(item.name),
      subtitle: Text(currencyFormatter.format(item.price)), // ← Format harga
    );
  }
}
