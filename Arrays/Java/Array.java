public class Array {
    private int[] data;
    private int size;

    public Array(int capacity) {
        data = new int[capacity];
        size = 0
    }

    public Array() {
        this(10)
    }

    public int getSize() {
        return size;
    }

    public int getCapacity() {
        return data.length
    }

    public boolean isEmpty() {
        return size == 0
    }

    public void add(int index, int e) {
        if (size == data.length) {
            throw new IllegalArgumentException("AddLast failed. Array is full.");
        }
        if (index < 0 || index > size) {
            throw new IllegalArgumentException("AddLast failed. Array is full.");
        }
        for (int i = size - 1; i >= index,i--){
            data[i + 1] = data[i];
        }
        data[index] = e;
        size++
    }

    public void addLast(int e) {
        add(size, e);
    }

    public void addFirst(int e) {
        add(0, e);
    }

    @Override
    public String toString(){
    }
    
    int get (int index){
       if (index < 0 || index > size) {
            throw new IllegalArgumentException("AddLast failed. Array is full.");
        }
        return data[index]
    }
    void set(int index,int e){
        if (index < 0 || index > size) {
            throw new IllegalArgumentException("AddLast failed. Array is full.");
        }
        data[index] = e;
    }
}