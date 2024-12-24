<script setup>
import { useForm } from '@inertiajs/vue3';
import Button from 'primevue/button';
import Accordion from 'primevue/accordion';
import AccordionPanel from 'primevue/accordionpanel';
import AccordionHeader from 'primevue/accordionheader';
import AccordionContent from 'primevue/accordioncontent';

const form = useForm({
    name: '',
    age: 0,
});

function saveStudent() {
    form.post(route('students.store'));
}

function deleteStudent(id) {
    if (confirm('Are you sure you want to delete this student?')) {
        form.delete(route('students.destroy', id));
        console.log('Student deleted');
    }
}
</script>

<template>
    <div>
        <h1 class="text-2xl">This is a sample form</h1>
        <form @submit.prevent="saveStudent">
            <div>
                <label for="name">Name</label>
                <input type="text" v-model="form.name" id="name">
            </div>
            <div>
                <label for="age">Age</label>
                <input type="number" v-model="form.age" id="age">
            </div>
            <div>
                <Button label="Submit" type="submit" />
            </div>
        </form>
        <hr>
        <Button label="Delete Student" @click="deleteStudent(3)" />
    </div>
    <div>
        <Button icon="pi pi-home" aria-label="Save" />
        <Button label="Profile" icon="pi pi-user" />
        <Button label="Save" icon="pi pi-check" iconPos="right" />
        <Button label="Search" icon="pi pi-search" iconPos="top" />
        <Button label="Update" icon="pi pi-refresh" iconPos="bottom" />
    </div>
    <div>
        <Accordion value="0">
            <AccordionPanel value="0">
                <AccordionHeader>Header I</AccordionHeader>
                <AccordionContent>
                    <p class="m-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </AccordionContent>
            </AccordionPanel>
            <AccordionPanel value="1">
                <AccordionHeader>Header II</AccordionHeader>
                <AccordionContent>
                    <p class="m-0">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                        ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Consectetur, adipisci velit, sed quia non numquam eius modi.
                    </p>
                </AccordionContent>
            </AccordionPanel>
            <AccordionPanel value="2">
                <AccordionHeader>Header III</AccordionHeader>
                <AccordionContent>
                    <p class="m-0">
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa
                        qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.
                    </p>
                </AccordionContent>
            </AccordionPanel>
        </Accordion>
    </div>
</template>

<style scoped></style>
