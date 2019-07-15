public class Array<E>{
    private E[] data;
    private int size;

    public Array(int capacity) {
        data = (E[])new Object[capacity];
        size = 0
    }

    public Array() {
        this(10)
    }

    public int getSize() {
        return size;
    }
    //查询内存容量
    public int getCapacity() {
        return data.length
    }
    //是否为空
    public boolean isEmpty() {
        return size == 0
    }
    //O(n)
    public void add(int index, E e) {
        if (size == data.length) {
            throw new IllegalArgumentException("AddLast failed. Array is full.");
        }
        if (index < 0 || index > size) {
            throw new IllegalArgumentException("index is illegal.");
        }
        if (size == data.length){
            resize(2 * data.length);
        }
        for (int i = size - 1; i >= index,i--){
            data[i + 1] = data[i];
        }
        data[index] = e;
        size++
    }
    //O(1)
    public void addLast(E e) {
        add(size, e);
    }
    //O(n)
    public void addFirst(E e) {
        add(0, e);
    }

     @Override
    public String toString(){

        StringBuilder res = new StringBuilder();
        res.append(String.format("Array: size = %d , capacity = %d\n", size, data.length));
        res.append('[');
        for(int i = 0 ; i < size ; i ++){
            res.append(data[i]);
            if(i != size - 1)
                res.append(", ");
        }
        res.append(']');
        return res.toString();
    }
    //O(1)
    public E get (int index){
       if (index < 0 || index > size) {
            throw new IllegalArgumentException("index is illegal.");
        }
        return data[index]
    }
    //O(1)
    public void set(int index,E e){
        if (index < 0 || index > size) {
            throw new IllegalArgumentException("index is illegal.");
        }
        data[index] = e;
    }
    //是否包含元素 //O(n)
    public boolean contains(E e){
        for(int i=0;i<size;i++){
            if(data[i].equals(e)){
                return true;
            }
        }
        return false;
    }
    //查找元素位置 O(n)
    public int find(E e){
        for(int i=0;i<size;i++){
            if((data[i].equals(e)){
                return i;
            }
        }
        return -1;
    }
    //删除元素 O(n)
    public int remove(int index){
        if (index < 0 || index > size) {
            throw new IllegalArgumentException("index is illegal.");
        }
        E ret = data[index];
         for (int i = size + 1; i < index,i++){
            data[i - 1] = data[i];
        }
        size --;
        data[size] = null;
        if(size == data.length / 4 && data.length /2 != 0){
            resize(data.length/2)
        }
        return ret;
    }
    //O(n)
    public E removeFirst(){
        return remove(0);
    }
    //O(1)
    public E removeLast(){
        return remove(size-1);
    }
     //O(n)
    public void removeElement(E e){
        int index = find(e);
        if(index != -1){
            remove(index)
        }
    }
    private void resize(int newCapacity){
        E[] newData = (E[])new Object[newCapacity];
        for(int i=0;i<size;i++){
            newData[i] = data[i]
        }
        data = newData
    }
}