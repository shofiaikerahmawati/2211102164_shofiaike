import 'package:flutter/material.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: Scaffold(
        appBar: AppBar(title: const Text('Stack Example')),
        body: Padding(
          padding: const EdgeInsets.all(10.0),
          child: Stack(
            children: <Widget>[
              Container(width: 100, height: 100, color: Colors.red),
              Container(width: 90, height: 90, color: Colors.green),
              Container(width: 80, height: 80, color: Colors.blue),
            ],
          ),
        ),
      ),
    );
  }
}
