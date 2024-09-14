package com.example.healthyrecipes;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.Toolbar;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class MainActivity extends AppCompatActivity {

    /*
    Android Activity Lifecycle:
    https://developer.android.com/guide/components/activities/activity-lifecycle
    Activity class provides core set of six callbacks: onCreate(), onStart(), onResume(), onPause(), onStop(), and onDestroy()
     */

    /*
    Note: onCreate() callback: Called when activity starting. Where most initialization should go.
    setContentView(int) method: Sets activity content from a layout resource,
    using findViewById(int) to programatically interact with widgets in the UI.
     */

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        //setContentView() indicates necessary application resources location
        //"R" represents resource directory("res")
        //"layout" refers to "layout" directory, , accessing activity_main.xml file
        setContentView(R.layout.activity_main);

        Toolbar toolbar = findViewById(R.id.myToolBar);
        setSupportActionBar(toolbar);

        //instantiate Button object variable "button" that refers to btnRecipe
        Button button = (Button) findViewById(R.id.btnRecipe);
        //associate onclickListener() to button object variable
        //when button clicked starts Recipe
        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                //Note: do *not* type in "packageContext" Android does so automatically!
                startActivity(new Intent(MainActivity.this, Recipe.class));
            }
        });

        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
    }
}