# Generated by Django 2.0.5 on 2018-05-31 13:09

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('core', '0011_bet_system_fee'),
    ]

    operations = [
        migrations.AlterField(
            model_name='bet',
            name='amount',
            field=models.DecimalField(decimal_places=2, max_digits=20),
        ),
    ]
