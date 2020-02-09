public class Lesson1 {
    public static void main(String[] args) {
        //Объявляем переменные всех пройденных на уроке типов
        byte byte_var1 = 0x2f; // = 47
        byte byte_var2 = 95;
        short short_var = 1523;
        int int_var = 46575;
        long long_var = 35467892345L;
        float float_var = 45.98f;
        double double_var1 = 567.78E21; // = 5.6778E23
        double double_var2 = 0x4F14p12; // = 20244 * 2^12 == 20244 * 4096 == 82919424 == 8.2919424 * 10^7 == 8.2919424E7
        char char_var1 = 'x';
        char char_var2 = '\u0057'; // = 'W'
        boolean bool_var = false;
        String my_string = "Некоторый текст";
        //Для проверки выводим в консоль
        System.out.println("byte_var1 = " + byte_var1);
        System.out.println("byte_var2 = " + byte_var2);
        System.out.println("short_var = " + short_var);
        System.out.println("int_var = " + int_var);
        System.out.println("long_var = " + long_var);
        System.out.println("float_var = " + float_var);
        System.out.println("double_var1 = " + double_var1);
        System.out.println("double_var2 = " + double_var2);
        System.out.println("char_var1 = " + char_var1);
        System.out.println("char_var2 = " + char_var2);
        System.out.println("bool_var = " + bool_var);
        System.out.println("my_string = " + my_string);

        //проверяем работу метода calculate()
        System.out.println(calculate(int_var, long_var, float_var, double_var2));

        //проверяем работу метода check_condition()
        System.out.println(check_condition(12, 5)); // true
        System.out.println(check_condition(2, 7));  // false
        System.out.println(check_condition(13, 9)); // false

        //проверяем метод print_neg_or_pos()
        print_neg_or_pos(34);
        print_neg_or_pos(-15);
        print_neg_or_pos(0);

        //проверяем метод is_negative()
        System.out.println(is_negative(15));  // false
        System.out.println(is_negative(-45)); // true
        System.out.println(is_negative(0));   // false

        //Всем привет))
        print_greeting("Вася");
        print_greeting("Петя");
        print_greeting("Изаура и Женуария");

    }

    public static double calculate(double a, double b, double c, double d) {
        return (a * (b + (c / d)));
    }

    //написал для int, аналогично можно и для long, float и double
    public static boolean check_condition(int a, int b) {
        return (((a + b) >= 10) &&  ((a + b) <= 20));
    }

    //тело if без {} ибо в одну строку))
    public static void print_neg_or_pos(int value) {
        if(value < 0) System.out.println("Число " + value + " отрицательное");
        else System.out.println("Число " + value + " положительное");
    }

    public static boolean is_negative(int a) {
        return a < 0;
    }

    public static void print_greeting(String name) {
        System.out.println("Привет, " + name + "!");
    }

}
