import 'dart:async';
import 'package:flutter/material.dart';
import 'package:flutter_local_notifications/flutter_local_notifications.dart';

void main() => runApp(
  MaterialApp(
    theme: ThemeData(appBarTheme: AppBarTheme(color: Colors.amber)),
    home: MyApp(),
    debugShowCheckedModeBanner: false,
  ),
);

class MyApp extends StatefulWidget {
  @override
  _MyAppState createState() => _MyAppState();
}

class _MyAppState extends State<MyApp> {
  late FlutterLocalNotificationsPlugin flutterLocalNotificationsPlugin;

  @override
  void initState() {
    super.initState();
    flutterLocalNotificationsPlugin = FlutterLocalNotificationsPlugin();

    var initializationSettingsAndroid = AndroidInitializationSettings(
      '@mipmap/ic_launcher',
    );

    var initializationSettingsIOS = DarwinInitializationSettings();

    var initializationSettings = InitializationSettings(
      android: initializationSettingsAndroid,
      iOS: initializationSettingsIOS,
    );

    // Cek versi package sebelum menentukan callback
    flutterLocalNotificationsPlugin.initialize(
      initializationSettings,
      onDidReceiveNotificationResponse: (NotificationResponse response) {
        // Gunakan ini untuk versi sebelum 9.0.0
        onSelectNotification(response.payload);
      },
      // onDidReceiveNotificationResponse: (NotificationResponse response) {
      //   onSelectNotification(response.payload);
      // }, // Gunakan ini untuk versi 9.0.0+
    );
  }

  void onSelectNotification(String? payload) {
    if (payload != null) {
      Navigator.of(context).push(
        MaterialPageRoute(
          builder: (_) {
            return NewScreen(payload: payload);
          },
        ),
      );
    }
    return;
  }

  Future<void> showNotification() async {
    var androidDetails = AndroidNotificationDetails(
      'id',
      'channel',
      channelDescription: 'description',
      priority: Priority.high,
      importance: Importance.max,
    );

    var iOSDetails = DarwinNotificationDetails();

    var platformDetails = NotificationDetails(
      android: androidDetails,
      iOS: iOSDetails,
    );

    await flutterLocalNotificationsPlugin.show(
      0,
      'Flutter Devs',
      'Flutter Local Notification Demo',
      platformDetails,
      payload: 'Welcome to the Local Notification demo',
    );
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Colors.amber,
        title: Text('Flutter Notification Demo'),
      ),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: <Widget>[
            ElevatedButton(
              onPressed: showNotification,
              child: Text('Show Notification'),
            ),
          ],
        ),
      ),
    );
  }
}

class NewScreen extends StatelessWidget {
  final String payload;

  NewScreen({Key? key, required this.payload}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: Text(payload)),
      body: Center(child: Text('Notification Clicked!')),
    );
  }
}
